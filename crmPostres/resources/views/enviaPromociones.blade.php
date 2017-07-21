 
<H1>Tenmos la siguintes promociones para ti</H1>
 @foreach($promociones as $p)
 
    
    <td>{{$p->nombre}}</td>
    <td>{{$p->descripcion}}</td>
    

   @endforeach