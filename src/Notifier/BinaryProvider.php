<?php

/*
 * This file is part of the JoliNotif project.
 *
 * (c) Loïck Piera <pyrech@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Joli\JoliNotif\Notifier;

trigger_deprecation('jolicode/jolinotif', '2.7', 'The "%s" interface is deprecated and will be removed in 3.0.', BinaryProvider::class);

/**
 * Interface implemented by notifiers when they provide their own binaries in
 * case the executable is not natively supported.
 *
 * @deprecated since 2.7, will be removed in 3.0
 */
interface BinaryProvider
{
    /**
     * Return whether the embedded binary can be used on the current system.
     */
    public function canBeUsed(): bool;

    /**
     * Return the absolute path of the directory containing all the files.
     */
    public function getRootDir(): string;

    /**
     * Return the path of the embedded binary.
     *
     * The path should be relative to the directory pointed by getRootDir().
     */
    public function getEmbeddedBinary(): string;

    /**
     * Return an array of files that should be extracted when JoliNotif is
     * used inside a phar archive.
     *
     * All paths should be relative to the directory pointed by getRootDir().
     *
     * @return list<string>
     */
    public function getExtraFiles(): array;
}
