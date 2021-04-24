<?php

namespace ContainerGVgacw9;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ef7c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer43262 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf4bff = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        if ($this->valueHolder9ef7c === $returnValue = $this->valueHolder9ef7c->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer43262 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9ef7c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9ef7c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__get', ['name' => $name], $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        if (isset(self::$publicPropertiesf4bff[$name])) {
            return $this->valueHolder9ef7c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef7c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ef7c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef7c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ef7c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__isset', array('name' => $name), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef7c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ef7c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__unset', array('name' => $name), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef7c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ef7c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__clone', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        $this->valueHolder9ef7c = clone $this->valueHolder9ef7c;
    }

    public function __sleep()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__sleep', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return array('valueHolder9ef7c');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer43262 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer43262;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'initializeProxy', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ef7c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ef7c;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
