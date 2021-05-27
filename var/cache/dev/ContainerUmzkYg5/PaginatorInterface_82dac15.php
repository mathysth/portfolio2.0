<?php

namespace ContainerUmzkYg5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3b81b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraa247 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9690a = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        if ($this->valueHolder3b81b === $returnValue = $this->valueHolder3b81b->paginate($target, $page, $limit, $options)) {
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

        $instance->initializeraa247 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder3b81b) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder3b81b = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__get', ['name' => $name], $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        if (isset(self::$publicProperties9690a[$name])) {
            return $this->valueHolder3b81b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b81b;

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

        $targetObject = $this->valueHolder3b81b;
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
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b81b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3b81b;
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
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__isset', array('name' => $name), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b81b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3b81b;
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
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__unset', array('name' => $name), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b81b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3b81b;
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
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__clone', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        $this->valueHolder3b81b = clone $this->valueHolder3b81b;
    }

    public function __sleep()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__sleep', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return array('valueHolder3b81b');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraa247 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraa247;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'initializeProxy', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3b81b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3b81b;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
