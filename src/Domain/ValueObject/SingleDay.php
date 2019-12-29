<?php

/*
 * This file is part of the eluceo/iCal package.
 *
 * (c) 2019 Markus Poerschke <markus@poerschke.nrw>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Eluceo\iCal\Domain\ValueObject;

final class SingleDay extends Occurrence
{
    private Date $date;

    private function __construct(Date $date)
    {
        $this->date = $date;
    }

    public function getDate(): Date
    {
        return $this->date;
    }

    public static function fromDate(Date $date): self
    {
        return new static($date);
    }
}