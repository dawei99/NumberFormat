<?php

namespace NumberFormat;
class NumberFormat
{
	public function convert(int $num): string
	{
		return (string) $num;
	}

	public static function strFirst(string $string, TypeEnum $type): string
	{
		return match ($type->value)
		{
			1 => ucfirst($string),
			2 => lcfirst($string),
		};
	}
}

