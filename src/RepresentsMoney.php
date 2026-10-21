<?php declare(strict_types=1);

namespace ComponoKit\Money\Interfaces;

interface RepresentsMoney extends \JsonSerializable
{
	public function getAmount(): int;

	public function getCurrency(): RepresentsCurrency;

	public function add( RepresentsMoney $other ): static;

	public function subtract( RepresentsMoney $other ): static;

	public function multiply( float $factor, \RoundingMode $roundingMode = \RoundingMode::HalfAwayFromZero ): static;

	public function divide( float $divisor, \RoundingMode $roundingMode = \RoundingMode::HalfAwayFromZero ): static;

	public function mod( RepresentsMoney $money ): static;

	public function absolute(): static;

	public function negate(): static;

	public function ratioOf( RepresentsMoney $money ): float;

	public function isZero(): bool;

	public function isPositive(): bool;

	public function isNegative(): bool;

	/**
	 * @return \Iterator<int,static>
	 */
	public function allocateToTargets( int $numberOfTargets ): \Iterator;

	/**
	 * @param int[] $ratios
	 *
	 * @return \Iterator<int,static>
	 */
	public function allocateByRatios( array $ratios ): \Iterator;

	public function extractPercentage( float $percentage, \RoundingMode $roundingMode = \RoundingMode::HalfAwayFromZero ): RepresentsExtractedPercentage;

	public function equals( RepresentsMoney $other ): bool;

	public function greaterThan( RepresentsMoney $other ): bool;

	public function greaterThanOrEqual( RepresentsMoney $other ): bool;

	public function lessThan( RepresentsMoney $other ): bool;

	public function lessThanOrEqual( RepresentsMoney $other ): bool;

	public function hasSameCurrency( RepresentsMoney $money ): bool;
}
