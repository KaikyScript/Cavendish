    <?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    use App\Http\Controllers\{
        CursoController
    };

    Route::get('/cursos/create', [CursoController::class, 'createCursos']);

    Route::get('/cursos', [CursoController::class, 'cursos']);

    /* INDEX */

    Route::get('/', function () {

        return view('welcome');
    });

    /* CONTATO */

    Route::get('/contato', function () {


        return view('contato');
    });

    /* ÁREA DE LOGIN */

    Route::get('/login', function () {

        return view('login.entrar');
    });

    /* ÁREA DE CADASTRO */

    Route::get('/cadastrar', function () {

        return view('login.cadastrar');
    });