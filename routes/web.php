<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;

Route::get('/', HomeController::class);

/* Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])
    ->name('posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])
    ->name('posts.destroy'); */

// Route::apiResource('huahua', PostController::class)
Route::resource('posts', PostController::class)
    // ->except(['destroy','edit'])
    // ->only(['index','create'])
    // ->parameters(['huahua' => 'post'])
    // ->names('posts')
    ;

/* Route::get('/post/{post}/{category?}', function($post,$category = null){
    if($category){
        return "Post papu {$post} de la categoria {$category}";
    }
    return "Post papu {$post} ";
}); */

/* Route::get('/post/{post}/{category}', function($post,$category){
    return "Post papu {$post} de la categoria {$category}";
});
 */

//Get
//Post
//Put
//Patch
//Delete

Route::get('prueba', function(){
    
    /* // Crear nuevo post
    $post = new Post;
    $post->title = 'Titulo de prueba 3';
    $post->content = 'Contenido de prueba 3';
    $post->categoria = 'Categoria de prueba 3';

    $post->save(); */

    /*
    // Buscar registro con el id 
    $post = Post::find(1); 
    */
    
    /*
    // Buscar y actulizar un registro
    $post = Post::where('title','Titulo de prueba 2')->first();

    $post->categoria = 'Desarrollo web';

    $post->save(); 
    */

    /* 
    // Traer todos los registros
    $post  = Post::all(); 
    */

    /* 
    // Lista de registros con restricciones
    $posts = Post::where('id', '>=', '2')->get();
    //$posts = Post::get(); 
    */

    /* 
    // Busqueda con ordenamiento
    $posts = Post::orderBy('id','desc')->get(); 
    */

    /* 
    // Limitando los atributos de los registros
    $posts = Post::orderBy('id','desc')
            ->select('id','title','categoria')
            ->get(); 
    */


    /* 
    // Con limite de registros
    $posts = Post::orderBy('id','desc')
            ->select('id','title','categoria')
            ->take(2)
            ->get(); 
    */

    /* 
    // Eliminar registro 
    $post = Post::where('id',1)
            ->first();

    $post->delete(); 
    */

    // return "Eliminado";

    /* 
    // Crear nuevo post con modificadores en el modelo
    $post = new Post;
    $post->title = 'Titulo de prueba 4';
    $post->content = 'Contenido de prueba 4';
    $post->categoria = 'Categoria de prueba 4';

    $post->save();
    return $post;
    */

    // Buscar registro con el id 
    // $post = Post::find(1);
    // dd($post->is_active);

    // User::create([
    //     'name' => 'Jane Doe',
    //     'email' => 'janeDoe@falso.com',
    //     'password' => bcrypt('12345678')
    // ]);

    // return 'Usuario creado';

    // Phone::create([
    //     'number' => '987654321',
    //     'user_id' => 102
    // ]);

    // return 'telefono creado';

    // $user = User::where('id',102)
    // ->with('phone')
    // ->first();

    $phone = Phone::find(1);

    return $phone->user;
});