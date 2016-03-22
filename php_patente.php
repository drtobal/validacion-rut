<h1>Validar Patente!<br>PHP</h1>

<p>Enviado por Mañungo</p>
<pre>

&lt;?php
function p($r){$p = array('AA','BA','CA','EA','FA','GA','HA','AB','CB','EB',
'FB','GB','HB','AC','BC','EC','FC','GC','HC','BD','ED','FD','GD','HD','AE',
'BE','CE','EE','FE','GE','HE','AF','BF','CF','EF','FF','GF','HF','AG','BG',
'CG','EG','FG','HG','AH','BH','CH','EH','FH','GH','HH','AJ','BJ','CJ','EJ',
'FJ','GJ','HJ','BK','CK','EK','FK','GK','HK','AL','BL','CL','EL','FL','GL',
'HL','AN','BN','CN','EN','FN','GN','HN','AP','BP','CP','EP','FP','GP','HP',
'AR','BR','CR','ER','FR','GR','HR','AS','BS','CS','ES','FS','GS','HS','AT',
'BT','CT','ET','FT','GT','HT','AU','BU','CU','EU','FU','GU','HU','AV','BV',
'CV','EV','FV','GV','HV','AX','BX','CX','EX','FX','GX','HX','BY','CY','EY',
'FY','GY','HY','AZ','BZ','CZ','EZ','FZ','GZ','DA','DB','DD','DE','DF','DG',
'DH','DI','DJ','DK','DL','DN','DP','DR','DS','DT','DU','DV','DX','DY','DZ',
'KA','KB','KC','KD','KE','KF','KG','KH','KJ','KK','KL','KN','KP','KR','KS',
'KT','KU','KV','KX','KY','KZ','LA','LB','LC','LD','LE','LF','LG','LH','LJ',
'LK','LL','LN','LP','LR','LS','LT','LU','LV','LX','LY','LZ','NA','NB','NC',
'ND','NE','NF','NG','NH','NJ','NK','NL','NN','NP','NR','NS','NT','NU','NV',
'NY','NZ','PA','PB','PC','PD','PE','PF','PG','PH','PJ','PK','PL','PN','PP',
'PS','PT','PU','PV','PX','PY','PZ','NX','RA','RB','RC','RD','RE','RF','RG',
'RH','RJ','RK','RL','RN','RP','RR','RS','RT','RU','RV','RX','RY','RZ','HZ',
'SA','SB','SC','SD','SE','SF','SG','SH','SJ','SK','SL','SN','SP','SR','SS',
'ST','SU','SV','SX','SY','SZ','TA','TB','TC','TD','TE','TF','TG','TH','TJ',
'TK','TL','TN','TP','TR','TS','TT','TU','TV','TX','TY','TZ','UA','UB','UC',
'UD','UE','UF','UG','UH','UJ','UK','UL','UN','UP','UR','US','UT','UU','UV',
'UX','UY','UZ','VA','VB','VC','VD','VE','VF','VG','VH','VJ','VK','VL','VN',
'VP','VR','VS','VT','VU','VV','VX','VY','VZ','XA','XB','XC','XD','XE','XF',
'XG','XH','XJ','XK','XL','XM','XN','XP','XQ','XR','XS','XT','XU','XV','XX',
'XY','XZ','YA','YB','JA','JB','JC','JD','JE','YC');
return(array_search(substr($r,0,2),$p)+1).substr($r,2);}
function dv($r){$r=p($r);$s=1;for($m=0;$r!=0;$r/=10)$s=($s+$r%10*(9-$m++%6))%11;
return chr($s?$s+47:75);}
?&gt;

</pre>

<form action="#" method="post">
<input type="text" size="10" maxlength="10" name="rut" value="XD8159">
&nbsp; - &nbsp;
<input type="text" size="1" maxlength="1" name="dv" value="7">
&nbsp;
<input type="submit" value=" Probar! ">
</form>