<?php

/**
 * Kea_EventListener
 *
 * @package Omeka
 * @author Kris Kelly
 **/
class Kea_EventListener extends Doctrine_EventListener
{
	private $plugin;
	
	public function __construct(Kea_Plugin $plugin) {
		$this->plugin = $plugin;
	}
	
	public function onLoad(Doctrine_Record $record) {
		$this->plugin->onLoad($record);
	}
    public function onUpdate(Doctrine_Record $record) {
		$this->plugin->onUpdate($record);
	}
//    public function onPreUpdate(Doctrine_Record $record) {}

    public function onCreate(Doctrine_Record $record) {
		$this->plugin->onCreate($record);
	}
//    public function onPreCreate(Doctrine_Record $record) {}
 
    public function onSave(Doctrine_Record $record) {}
//    public function onPreSave(Doctrine_Record $record) {}
 
    public function onInsert(Doctrine_Record $record) {}
//    public function onPreInsert(Doctrine_Record $record) {}
 
    public function onDelete(Doctrine_Record $record) {}
//    public function onPreDelete(Doctrine_Record $record) {}
 
    public function onEvict(Doctrine_Record $record) {}
//    public function onPreEvict(Doctrine_Record $record) {}
 
//    public function onSleep(Doctrine_Record $record) {}
    
//    public function onWakeUp(Doctrine_Record $record) {}
    
//    public function onClose(Doctrine_Connection $connection) {}
//    public function onPreClose(Doctrine_Connection $connection) {}
    
//    public function onOpen(Doctrine_Connection $connection) {}
 
//    public function onTransactionCommit(Doctrine_Connection $connection) {}
//    public function onPreTransactionCommit(Doctrine_Connection $connection) {}
 
//    public function onTransactionRollback(Doctrine_Connection $connection) {}
//   public function onPreTransactionRollback(Doctrine_Connection $connection) {}
 
//    public function onTransactionBegin(Doctrine_Connection $connection) {}
//    public function onPreTransactionBegin(Doctrine_Connection $connection) {}
    
//    public function onCollectionDelete(Doctrine_Collection $collection) {}
//    public function onPreCollectionDelete(Doctrine_Collection $collection) {}
} // END class Kea_EventListener

?>