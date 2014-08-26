<?php

// Start of sysvshm v.

/**
 * (PHP 4, PHP 5)<br/>
 * Creates or open a shared memory segment
 * @link http://php.net/manual/en/function.shm-attach.php
 * @param int $key <p>
 * A numeric shared memory segment ID
 * </p>
 * @param int $memsize [optional] <p>
 * The memory size. If not provided, default to the
 * sysvshm.init_mem in the <i>php.ini</i>, otherwise 10000
 * bytes.
 * </p>
 * @param int $perm [optional] <p>
 * The optional permission bits. Default to 0666.
 * </p>
 * @return resource a shared memory segment identifier.
 */
function shm_attach ($key, $memsize = null, $perm = 0666) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Removes shared memory from Unix systems
 * @link http://php.net/manual/en/function.shm-remove.php
 * @param resource $shm_identifier <p>
 * The shared memory identifier as returned by
 * <b>shm_attach</b>
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function shm_remove ($shm_identifier) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Disconnects from shared memory segment
 * @link http://php.net/manual/en/function.shm-detach.php
 * @param resource $shm_identifier <p>
 * A shared memory resource handle as returned by
 * <b>shm_attach</b>
 * </p>
 * @return bool <b>shm_detach</b> always returns <b>TRUE</b>.
 */
function shm_detach ($shm_identifier) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Inserts or updates a variable in shared memory
 * @link http://php.net/manual/en/function.shm-put-var.php
 * @param resource $shm_identifier <p>
 * A shared memory resource handle as returned by
 * <b>shm_attach</b>
 * </p>
 * @param int $variable_key <p>
 * The variable key.
 * </p>
 * @param mixed $variable <p>
 * The variable. All variable types
 * that <b>serialize</b> supports may be used: generally
 * this means all types except for resources and some internal objects
 * that cannot be serialized.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function shm_put_var ($shm_identifier, $variable_key, $variable) {}

/**
 * (PHP 5 &gt;= 5.3.0)<br/>
 * Check whether a specific entry exists
 * @link http://php.net/manual/en/function.shm-has-var.php
 * @param resource $shm_identifier <p>
 * Shared memory segment, obtained from <b>shm_attach</b>.
 * </p>
 * @param int $variable_key <p>
 * The variable key.
 * </p>
 * @return bool <b>TRUE</b> if the entry exists, otherwise <b>FALSE</b>
 */
function shm_has_var ($shm_identifier, $variable_key) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Returns a variable from shared memory
 * @link http://php.net/manual/en/function.shm-get-var.php
 * @param resource $shm_identifier <p>
 * Shared memory segment, obtained from <b>shm_attach</b>.
 * </p>
 * @param int $variable_key <p>
 * The variable key.
 * </p>
 * @return mixed the variable with the given key.
 */
function shm_get_var ($shm_identifier, $variable_key) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Removes a variable from shared memory
 * @link http://php.net/manual/en/function.shm-remove-var.php
 * @param resource $shm_identifier <p>
 * The shared memory identifier as returned by
 * <b>shm_attach</b>
 * </p>
 * @param int $variable_key <p>
 * The variable key.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function shm_remove_var ($shm_identifier, $variable_key) {}

// End of sysvshm v.
?>
