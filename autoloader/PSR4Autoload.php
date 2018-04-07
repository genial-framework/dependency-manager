<?php
declare(strict_types=1);
/**
 * Autoloader.
 *
 * @author  Autoloader Contributors <https://github.com/genial-framework/autoloader/graphs/contributors>.
 *
 * @link    <https://github.com/genial-framework/autoloader> Github Repository.
 * @license <https://github.com/genial-framework/autoloader/master/LICENSE> MIT License.
 */

/**
 * PSRAutoloader.
 */
class PSRAutoloader
{

    /**
     * Does the class use namespaced prefix?
     *
     * @param string $prefix The namespaced prefix
     * @param string $class  The class name.
     *
     * @return bool Return TRUE if the class uses the namespaced prefix and
     *                     FALSE if it does not.
     */
    public function namespacedPrefix(
        string $prefix,
        string $class
    ): bool {
        $len = \strlen($prefix);
        if (\strncmp($prefix, $class, $len) !== 0) {
            return \false;
        }
        return \true;
    }
}
