<h1>{{$titulo}}</h1>

<ul>
@foreach($alumnos as $alumno)
    <li>{{$alumno}}</li>
    @endforeach
    </ul>

<a href="/">Regresar al menu principal</a>
<br>
{{$var ?? 'No existe esa variable'}}
