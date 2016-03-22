<h1>Validar RUT!<br>PHP</h1>

<p>Enviado por Luis Dujovne</p>
<pre>

&lt;?php
function dv($r){$s=1;for($m=0;$r!=0;$r/=10)$s=($s+$r%10*(9-$m++%6))%11;
return chr($s?$s+47:75);}
?&gt;

</pre>

<form action="#" method="post">
<input type="text" size="10" maxlength="10" name="rut" value="">
&nbsp; - &nbsp;
<input type="text" size="1" maxlength="1" name="dv" value="">
&nbsp;
<input type="submit" value=" Probar! ">
</form>