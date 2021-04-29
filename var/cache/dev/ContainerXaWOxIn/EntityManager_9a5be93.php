<?php

namespace ContainerXaWOxIn;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4c218 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58b47 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0e9af = [
        
    ];

    public function getConnection()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getConnection', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getMetadataFactory', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getExpressionBuilder', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'beginTransaction', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getCache', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getCache();
    }

    public function transactional($func)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'transactional', array('func' => $func), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->transactional($func);
    }

    public function commit()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'commit', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->commit();
    }

    public function rollback()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'rollback', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getClassMetadata', array('className' => $className), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'createQuery', array('dql' => $dql), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'createNamedQuery', array('name' => $name), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'createQueryBuilder', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'flush', array('entity' => $entity), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'clear', array('entityName' => $entityName), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->clear($entityName);
    }

    public function close()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'close', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->close();
    }

    public function persist($entity)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'persist', array('entity' => $entity), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'remove', array('entity' => $entity), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'refresh', array('entity' => $entity), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'detach', array('entity' => $entity), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'merge', array('entity' => $entity), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'contains', array('entity' => $entity), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getEventManager', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getConfiguration', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'isOpen', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getUnitOfWork', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getProxyFactory', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'initializeObject', array('obj' => $obj), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'getFilters', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'isFiltersStateClean', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'hasFilters', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return $this->valueHolder4c218->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer58b47 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4c218) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4c218 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4c218->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, '__get', ['name' => $name], $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        if (isset(self::$publicProperties0e9af[$name])) {
            return $this->valueHolder4c218->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c218;

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

        $targetObject = $this->valueHolder4c218;
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
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c218;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4c218;
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
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, '__isset', array('name' => $name), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c218;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4c218;
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
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, '__unset', array('name' => $name), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c218;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4c218;
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
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, '__clone', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        $this->valueHolder4c218 = clone $this->valueHolder4c218;
    }

    public function __sleep()
    {
        $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, '__sleep', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;

        return array('valueHolder4c218');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer58b47 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58b47;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer58b47 && ($this->initializer58b47->__invoke($valueHolder4c218, $this, 'initializeProxy', array(), $this->initializer58b47) || 1) && $this->valueHolder4c218 = $valueHolder4c218;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4c218;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4c218;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
