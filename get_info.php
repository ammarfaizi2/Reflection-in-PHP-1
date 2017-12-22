<?php

function get_info($fn)
{
	$fn = new ReflectionFunction($fn);
	$i = 0;
	foreach ($fn->getParameters() as $key => $val) {
		strpos($val, "required") !== false and $i++;
	}
	return [
		$key + 1,
		$i,
		$fn->hasReturnType(),
		$fn->isClosure(),
		$fn->isInternal(),
		$fn->isUserDefined()
	];
}