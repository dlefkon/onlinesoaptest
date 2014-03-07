<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
// use Websites;

class AppKernel extends Kernel
{

// 	/**
// 	 * {@inheritdoc}
// 	 *
// 	 * @api
// 	 */
// 	public function getRootDir()
// 	{
// 		if (null === $this->rootDir) {
// 			$r = new \ReflectionObject($this);
// 			$this->rootDir = str_replace('\\', '/', dirname($r->getFileName()));
// 		}
// // var_dump($this->getLogDir());
// 		return $this->rootDir;
// 	}
	
	
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
//             new Websites\ApplepiesBundle\ApplepiesBundle(),
//             new Websites\LampquizBundle\LampquizBundle(),
            new Websites\BaseBundle\BaseBundle(),
            new Websites\OnlinesoaptestBundle\OnlinesoaptestBundle()
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
