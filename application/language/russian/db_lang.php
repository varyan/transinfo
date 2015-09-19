<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Не удается определить параметры базы данных на основе строки подключения, которые вы представили.';
$lang['db_unable_to_connect'] = 'Невозможно подключиться к серверу базы данных, используя предоставленные параметры.';
$lang['db_unable_to_select'] = 'Невозможно выбрать указанную базу данных: %s';
$lang['db_unable_to_create'] = 'Не удается создать указанную базу данных: %s';
$lang['db_invalid_query'] = 'Запрос, который Вы представили, не действителен.';
$lang['db_must_set_table'] = 'Вы должны установить таблицы базы данных, которые будут использоваться с вашим запросом.';
$lang['db_must_use_set'] = 'Вы должны использовать метод "update", чтобы обновить запись.';
$lang['db_must_use_index'] = 'Вы должны указать индекс, для пакетного обновления.';
$lang['db_batch_missing_index'] = 'Один или более рядов, представленных для пакетного обновления отсутствует указанный индекс.';
$lang['db_must_use_where'] = 'Обновления не допускаются, если они не содержат оператора "Where".';
$lang['db_del_must_use_where'] = 'Удаления не допускаются, если они не содержат ", где" или "как" положение.';
$lang['db_field_param_missing'] = 'Для выборки полей требует имя таблицы в качестве параметра.';
$lang['db_unsupported_function'] = 'Эта функция не доступна для базы данных, которую вы используете.';
$lang['db_transaction_failure'] = 'Ошибка транзакции: Откат выполненных.';
$lang['db_unable_to_drop'] = 'Не удалось удалить указанную базу данных.';
$lang['db_unsupported_feature'] = 'Вы используете неподдерживаемые функции на базе платформы.';
$lang['db_unsupported_compression'] = 'Файл Формат сжатия, который вы выбрали, не поддерживается на вашем сервере.';
$lang['db_filepath_error'] = 'Не удается записать данные в файл путь вы представили.';
$lang['db_invalid_cache_path'] = 'Кэш путь вы указали не действительный или доступный для записи.';
$lang['db_table_name_required'] = 'Имя таблицы, необходимые для этой операции.';
$lang['db_column_name_required'] = 'Имя столбца требуется для этой операции.';
$lang['db_column_definition_required'] = 'Определение столбца требуется для этой операции.';
$lang['db_unable_to_set_charset'] = 'Невозможно установить соединение клиента набор символов: %s';
$lang['db_error_heading'] = 'Базы Данных Ошибка';
