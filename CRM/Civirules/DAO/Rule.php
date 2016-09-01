<?php
/**
 * DAO Rule for table civirule_rule
 * 
 * @author Erik Hommel (CiviCooP) <erik.hommel@civicoop.org>
 * @license http://www.gnu.org/licenses/agpl-3.0.html
 */
class CRM_Civirules_DAO_Rule extends CRM_Core_DAO {
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  static $_export = null;
  /**
   * empty definition for virtual function
   */
  static function getTableName() {
    return 'civirule_rule';
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields() {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'maxlength' => 80,
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'maxlength' => 128,
        ),
        'trigger_id' => array(
          'name' => 'trigger_id',
          'type' => CRM_Utils_Type::T_INT,
        ),
        'trigger_params' => array(
          'name' => 'trigger_params',
          'type' => CRM_Utils_Type::T_TEXT
        ),
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_INT,
        ),
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
        ),
        'help_text' => array(
          'name' => 'help_text',
          'type' => CRM_Utils_Type::T_TEXT,
        ),
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE
        ),
        'created_user_id' => array(
          'name' => 'created_user_id',
          'type' => CRM_Utils_Type::T_INT
        ),
        'modified_date' => array(
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_DATE
        ),
        'modified_user_id' => array(
          'name' => 'modified_user_id',
          'type' => CRM_Utils_Type::T_INT
        ),
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the array key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys() {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id', 
        'name' => 'name',
        'label' => 'label',
        'trigger_id' => 'trigger_id',
        'trigger_params' => 'trigger_params',
        'is_active' => 'is_active',
        'description' => 'description',
        'help_text' => 'help_text',
        'created_date' => 'created_date',
        'created_user_id' => 'created_user_id',
        'modified_date' => 'modified_date',
        'modified_user_id' => 'modified_user_id',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['activity'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}