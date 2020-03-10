# yii2-pevnev-security-helper
<p>
<h2>Description</h2>
Based on Yii2 security function <i>encryptByKey</i>, this helper returns an encoded string aveliable to be used as a GET parameter.
<h2>Install</h2>
<b>composer require "wolverineo250kr/yii2-pevnev-security-helper":"*"</b>
<h2>Usage</h2>
To <b>encode</b> string call in your Yii2 app following php command with your encryption key:
<pre>
\wolverineo250kr\helpers\security\SecurityHelper::encodeStringByKey('Your string', 'yourKey');
</pre> 
<br/>
<br/>
To <b>decode</b> string call in your Yii2 app following php command with your encryption key:
<pre>
\wolverineo250kr\helpers\security\SecurityHelper::decodeStringByKey('5arqQR_W4GYzB5uIwNDUfDg4YTcyZjFiMzg3OTQwN2YzOTRjMTEzODlmODVjZjIxOGQ0ODUzZDNhNmEyODg3MDA3OGZiMzZkZDhkMGVhNjD9yDn2R8FySgjbfIzuISO3miPmWLSBFz7f0wWMbrNYRw', 'yourKey');
</pre> 
