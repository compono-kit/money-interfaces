<?php declare(strict_types=1);

namespace ComponoKit\Money\Interfaces;

interface RepresentsExtractedPercentage
{
	public function getPercentage(): RepresentsMoney;

	public function getSubTotal(): RepresentsMoney;
}
