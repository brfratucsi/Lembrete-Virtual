<?php
/** @package    DesenvolvimentoServidores2Final::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * LembreteMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the LembreteDAO to the lembrete datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package DesenvolvimentoServidores2Final::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class LembreteMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Registro"] = new FieldMap("Registro","lembrete","registro",true,FM_TYPE_INT,11,null,true);
			self::$FM["Titulo"] = new FieldMap("Titulo","lembrete","titulo",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["Prioridade"] = new FieldMap("Prioridade","lembrete","prioridade",false,FM_TYPE_ENUM,array("baixa","alta"),null,false);
			self::$FM["Descricao"] = new FieldMap("Descricao","lembrete","descricao",false,FM_TYPE_VARCHAR,400,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
		}
		return self::$KM;
	}

}

?>