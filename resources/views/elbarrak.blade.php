hi
<a href="{{ url ('admin/hi')}}">mo</a>
<!-- <a href="{{ url ('/hh')}}">mo2</a> ne marche pas car /hh est method post non pas get-->
<form action="{{ url ('/hh')}}" method="post"><!-- Route::post('/hh', function () { }); //on peut entrer a cette page seulement si l'appele et dans une autre page avec bouton par exemple -->
    {{csrf_field()}}
    <input type="submit" name="bt" value="bouton home ">
</form>