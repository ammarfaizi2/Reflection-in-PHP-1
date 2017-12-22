<?php

function get_info($fn)
{
	$fn = new ReflectionFunction($fn);
	return [
		$fn->getNumberOfParameters(),
		$fn->getNumberOfRequiredParameters(),
		$fn->hasReturnType(),
		$fn->isClosure(),
		$fn->isInternal(),
		$fn->isUserDefined()
	];
}