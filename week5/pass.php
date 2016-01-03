<?php
$pass = '$2y$10$a0ZF8Tp5Rv1aS4gkDp2O1e2/1Ba/lGLb0lhsTnxdT13HXD6gEblIO';
echo $pass;

if (password_verify('geheim', $pass))
{
	echo 'goed';
} else {
	echo 'fout';
}
