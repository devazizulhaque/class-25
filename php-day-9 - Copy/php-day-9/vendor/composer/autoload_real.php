<?xml version="1.0" encoding="UTF-8"?>
<project version="4">
  <component name="PhpIncludePathManager">
    <include_path>
      <path value="$PROJECT_DIR$/vendor/composer" />
    </include_path>
  </component>
</project>                                                                                                                                                                                                                                                                                             }

        spl_autoload_register(array('ComposerAutoloaderInitbc5148fa7dc352dd659cd19fdae21dc3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbc5148fa7dc352dd659cd19fdae21dc3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbc5148fa7dc352dd659cd19fdae21dc3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
