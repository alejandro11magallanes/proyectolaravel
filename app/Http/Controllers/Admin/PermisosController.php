<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Verificacion;
use Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Codes access|Post create|Post edit|Post delete', ['only' => ['index','show']]);
        // $this->middleware('role_or_permission:Post create', ['only' => ['create','store']]);
        // $this->middleware('role_or_permission:Post edit', ['only' => ['edit','update']]);
        // $this->middleware('role_or_permission:Post delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Post= Post::paginate(4);

        return view('post.index',['posts'=>$Post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.new');
    }
    public function verificar()
    {
       return view('post.verificacion');
    }


   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $data['user_id'] = Auth::user()->id;
        $archivo = $request->file('image');
        $nombre = $archivo->getClientOriginalName();
        $img = $request->file('image');
        $store = Storage::disk('do')->put('/imagenes/'.$nombre,file_get_contents($request->file('image')->getRealPath()), 'public');
        
        
        
        $folder = '/imagenes/'.$nombre;
        $data['imagen_url'] = $folder;
        $Post = Post::create($data);
        
       // return back()->with('message','Producto creado');
       return redirect()->back()->withSuccess('Producto creado');
    
    }

    public function guardarPeticion(Request $request){
        $datos = $request->all();
        $datos['user_id']= Auth::user()->id;
        $datos['username']= Auth::user()->name;
        $datos['correo']= Auth::user()->email;
        $Verificar = Verificacion::create($datos);
        return redirect()->back()->withSuccess('Espera a que tu supervisor te envie tu codigo al correo que registraste');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
       return view('post.edit',['post' => $post]);
    }


    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->back()->withSuccess('Producto actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Producto eliminado!');
    }
}
