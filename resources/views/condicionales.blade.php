@if ($log)
@include('index')
@else
<h4>Entro al usuario normal</h4>
@endif
<h2>Ejemplo ciclos</h2>
<h3>Ciclo For</h3>
<ul>
@for ($i=0; $i<=3; $i++)
    <li>El valor de la i es:  {{$i}}</li>
@endfor
</ul>

<?php $var=0; ?>
<h3>Ciclo While</h3>
@while($var<=3)
El valor de var es: {{$var}}
<br>
<?php $var++?>
@endwhile
<?php  $variable=1  ?>
<h3>Switch</h3>
@switch($variable)
    @case(1)
    El valor de la variable es {{$variable}}
    @break
    @case(2)
    El valor de la variable es {{$variable}}
    @break
    @case(3)
    El valor de la variable es: {{$variable}}
    @break
    @default
    Inicializacion de la variable en 0
    @break
    @endswitch
<br>
<a href="/">Volver</a>
