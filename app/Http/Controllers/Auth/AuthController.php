<!-- <?php

namespace App\Http\Controllers\Auth;

use App\User;
use DB;
use Validator;
use Mail;
use Session;
use Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {

      $this->middleware($this->guestMiddleware(), ['except' => 'logout']);

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'genero' => 'required',
            'nacimiento' => 'required|date',
            'ciudad' => 'required',
            'pais' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $hash = md5(date('Y/m/d H:i:s'));
        $this->enviamail($data['email'], $hash);


        return User::create([
            'name' => $data['name'],
            'genero' => $data['genero'],
            'nacimiento' => $data['nacimiento'],
            'ciudad' => $data['ciudad'],
            'pais' => $data['pais'],
            'nickname' => $data['nickname'],
            'is_parent' => $data['is_parent'],
            'is_teacher' => $data['is_teacher'],
            'is_student' => $data['is_student'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'hash' =>  $hash,
        ]);

      }

      protected function enviamail($correo, $hash){


          Mail::send('viewMail/mailActivacion', ['correo' => $correo, 'hash' => $hash], function ($m) use ($correo) {
              $m->from('mitec@televisioneducativa.gob.mx', 'Muestra Iberoamericana');
              $m->to($correo)->subject('Activación de correo!');
          });
          return redirect('viewMail/correoValidado');

      }

      protected function activaCorreo(Request $request, $correo, $hash) {

          $news = \App\User::where('email', '=', $correo)->first();

          if ($news->hash == $hash) {
              $news->activo = 1;
              $news->save();
              return redirect('viewMail/correoValidado');
          } else {
              print 'error';
          }
      }

      protected function activado() {

          return view('viewMail/correoValidado');

      }

}
