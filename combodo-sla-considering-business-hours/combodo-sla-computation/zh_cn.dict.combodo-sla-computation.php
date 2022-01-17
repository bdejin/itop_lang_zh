<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
//
// Class: CoverageWindow
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:CoverageWindows' => '工作时间范围',
	'Menu:CoverageWindows+' => '所有工作时间范围',
	'Class:CoverageWindow' => '工作时间范围',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:name' => '名称',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindow/Attribute:description' => '描述',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => '俗称',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => '工作时间',
	'WorkingHoursInterval:StartTime' => '开始时间：',
	'WorkingHoursInterval:EndTime' => '结束时间',
	'WorkingHoursInterval:WholeDay' => '整天：',
	'WorkingHoursInterval:RemoveIntervalButton' => '删除时间间隔',
	'WorkingHoursInterval:DlgTitle' => '工作时间间隔编辑',
	'Class:CoverageWindowInterval' => '工作时间间隔',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => '工作时间范围',
	'Class:CoverageWindowInterval/Attribute:weekday' => '星期几',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => '星期日',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => '星期一',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => '星期二',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => '星期三',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => '星期四',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => '星期五',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => '星期六',
	'Class:CoverageWindowInterval/Attribute:start_time' => '开始时间',
	'Class:CoverageWindowInterval/Attribute:end_time' => '结束时间',
	
));

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	// Dictionary entries go here
	'Menu:Holidays' => '假期',
	'Menu:Holidays+' => '所有假期',
	'Class:Holiday' => '假日',
	'Class:Holiday+' => '一个非工作日',
	'Class:Holiday/Attribute:name' => '名称',
	'Class:Holiday/Attribute:date' => '日期',
	'Class:Holiday/Attribute:calendar_id' => '日历',
	'Class:Holiday/Attribute:calendar_id+' => '该假日关联（若有）的日历',
	'Coverage:Description' => '描述',	
	'Coverage:StartTime' => '开始时间',	
	'Coverage:EndTime' => '结束时间',

));

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => '假期日历',
	'Menu:HolidayCalendars+' => '所有假期日历',
	'Class:HolidayCalendar' => '假日日历',
	'Class:HolidayCalendar+' => '其他对象可以做关联的一组假日',
	'Class:HolidayCalendar/Attribute:name' => '名称',
	'Class:HolidayCalendar/Attribute:holiday_list' => '假期',
));

//
// Class: CoverageWindowInterval
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => '工作时间范围名称',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '工作时间范围名称',
));

//
// Class: Holiday
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Holiday/Attribute:calendar_name' => '假期日历名称',
	'Class:Holiday/Attribute:calendar_name+' => '假期日历名称',
))