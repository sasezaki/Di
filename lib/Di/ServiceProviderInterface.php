<?php
/**
 * Annotation based simple DI (Dependency Injection) & AOP (Aspect Oriented Programming).
 *
 * @author    Ranyuen <cal_pone@ranyuen.com>
 * @author    ne_Sachirou <utakata.c4se@gmail.com>
 * @copyright 2014-2014 Ranyuen
 * @license   http://www.gnu.org/copyleft/gpl.html GPL
 */
namespace Ranyuen\Di;

/**
 * Service provider interface.
 */
interface ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * @param Container $container An Container instance
     *
     * @return void
     */
    public function register(Container $container);
}
