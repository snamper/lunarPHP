<?php

namespace LunarPHP\Core;

/**
 * Created by ljy
 * User: ljy <sal597685816@live.cn>
 * Date: 2017/8/18
 * Time: 16:01
 */

$tianGan = array("甲","乙","丙","丁","戊","己","庚","辛","壬","癸");

$diZhi = array("子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥");

$yearGan = array(
    '1' =>  array('甲','己'),
    '2' =>  array('乙','庚'),
    '3' =>  array('丙','辛'),
    '4' =>  array('丁','壬'),
    '5' =>  array('戊','癸'),
);

$monthGan = array(
    '1' =>  array(
        '1'     =>  '丙寅',
        '2'     =>  '丁卯',
        '3'     =>  '戊辰',
        '4'     =>  '己巳',
        '5'     =>  '庚午',
        '6'     =>  '辛未',
        '7'     =>  '壬申',
        '8'     =>  '癸酉',
        '9'     =>  '甲戌',
        '10'    =>  '乙亥',
        '11'    =>  '丙子',
        '12'    =>  '丁丑',
    ),
    '2' =>  array(
        '1'     =>  '戊寅',
        '2'     =>  '己卯',
        '3'     =>  '庚辰',
        '4'     =>  '辛巳',
        '5'     =>  '壬午',
        '6'     =>  '癸未',
        '7'     =>  '甲申',
        '8'     =>  '乙酉',
        '9'     =>  '丙戌',
        '10'    =>  '丁亥',
        '11'    =>  '戊子',
        '12'    =>  '己丑',
    ),
    '3' =>  array(
        '1'     =>  '庚寅',
        '2'     =>  '辛卯',
        '3'     =>  '壬辰',
        '4'     =>  '癸巳',
        '5'     =>  '甲午',
        '6'     =>  '乙未',
        '7'     =>  '丙申',
        '8'     =>  '丁酉',
        '9'     =>  '戊戌',
        '10'    =>  '己亥',
        '11'    =>  '庚子',
        '12'    =>  '辛丑',
    ),
    '4' =>  array(
        '1'     =>  '壬寅',
        '2'     =>  '癸卯',
        '3'     =>  '甲辰',
        '4'     =>  '乙巳',
        '5'     =>  '丙午',
        '6'     =>  '丁未',
        '7'     =>  '戊申',
        '8'     =>  '己酉',
        '9'     =>  '庚戌',
        '10'    =>  '辛亥',
        '11'    =>  '壬子',
        '12'    =>  '癸丑',
    ),
    '5' =>  array(
        '1'     =>  '甲寅',
        '2'     =>  '乙卯',
        '3'     =>  '丙辰',
        '4'     =>  '丁巳',
        '5'     =>  '戊午',
        '6'     =>  '己未',
        '7'     =>  '庚申',
        '8'     =>  '辛酉',
        '9'     =>  '壬戌',
        '10'    =>  '癸亥',
        '11'    =>  '甲子',
        '12'    =>  '乙丑',
    ),
);

$dataInfo = array(
    0x04bd8,0x04ae0,0x0a570,0x054d5,0x0d260,0x0d950,0x16554,0x056a0,0x09ad0,0x055d2,//1900-1909
    0x04ae0,0x0a5b6,0x0a4d0,0x0d250,0x1d255,0x0b540,0x0d6a0,0x0ada2,0x095b0,0x14977,//1910-1919
    0x04970,0x0a4b0,0x0b4b5,0x06a50,0x06d40,0x1ab54,0x02b60,0x09570,0x052f2,0x04970,//1920-1929
    0x06566,0x0d4a0,0x0ea50,0x06e95,0x05ad0,0x02b60,0x186e3,0x092e0,0x1c8d7,0x0c950,//1930-1939
    0x0d4a0,0x1d8a6,0x0b550,0x056a0,0x1a5b4,0x025d0,0x092d0,0x0d2b2,0x0a950,0x0b557,//1940-1949
    0x06ca0,0x0b550,0x15355,0x04da0,0x0a5b0,0x14573,0x052b0,0x0a9a8,0x0e950,0x06aa0,//1950-1959
    0x0aea6,0x0ab50,0x04b60,0x0aae4,0x0a570,0x05260,0x0f263,0x0d950,0x05b57,0x056a0,//1960-1969
    0x096d0,0x04dd5,0x04ad0,0x0a4d0,0x0d4d4,0x0d250,0x0d558,0x0b540,0x0b6a0,0x195a6,//1970-1979
    0x095b0,0x049b0,0x0a974,0x0a4b0,0x0b27a,0x06a50,0x06d40,0x0af46,0x0ab60,0x09570,//1980-1989
    0x04af5,0x04970,0x064b0,0x074a3,0x0ea50,0x06b58,0x055c0,0x0ab60,0x096d5,0x092e0,//1990-1999
    0x0c960,0x0d954,0x0d4a0,0x0da50,0x07552,0x056a0,0x0abb7,0x025d0,0x092d0,0x0cab5,//2000-2009
    0x0a950,0x0b4a0,0x0baa4,0x0ad50,0x055d9,0x04ba0,0x0a5b0,0x15176,0x052b0,0x0a930,//2010-2019
    0x07954,0x06aa0,0x0ad50,0x05b52,0x04b60,0x0a6e6,0x0a4e0,0x0d260,0x0ea65,0x0d530,//2020-2029
    0x05aa0,0x076a3,0x096d0,0x04bd7,0x04ad0,0x0a4d0,0x1d0b6,0x0d250,0x0d520,0x0dd45,//2030-2039
    0x0b5a0,0x056d0,0x055b2,0x049b0,0x0a577,0x0a4b0,0x0aa50,0x1b255,0x06d20,0x0ada0,//2040-2049
    0x14b63,0x09370,0x049f8,0x04970,0x064b0,0x168a6,0x0ea50, 0x06b20,0x1a6c4,0x0aae0,//2050-2059
    0x0a2e0,0x0d2e3,0x0c960,0x0d557,0x0d4a0,0x0da50,0x05d55,0x056a0,0x0a6d0,0x055d4,//2060-2069
    0x052d0,0x0a9b8,0x0a950,0x0b4a0,0x0b6a6,0x0ad50,0x055a0,0x0aba4,0x0a5b0,0x052b0,//2070-2079
    0x0b273,0x06930,0x07337,0x06aa0,0x0ad50,0x14b55,0x04b60,0x0a570,0x054e4,0x0d160,//2080-2089
    0x0e968,0x0d520,0x0daa0,0x16aa6,0x056d0,0x04ae0,0x0a9d4,0x0a2d0,0x0d150,0x0f252,//2090-2099
    0x0d520
);

$animals = array("鼠","牛","虎","兔","龙","蛇","马","羊","猴","鸡","狗","猪");

$lunarInfo = array(
    array(0,2,9,21936),array(6,1,30,9656),array(0,2,17,9584),array(0,2,6,21168),array(5,1,26,43344),array(0,2,13,59728),
    array(0,2,2,27296),array(3,1,22,44368),array(0,2,10,43856),array(8,1,30,19304),array(0,2,19,19168),array(0,2,8,42352),
    array(5,1,29,21096),array(0,2,16,53856),array(0,2,4,55632),array(4,1,25,27304),array(0,2,13,22176),array(0,2,2,39632),
    array(2,1,22,19176),array(0,2,10,19168),array(6,1,30,42200),array(0,2,18,42192),array(0,2,6,53840),array(5,1,26,54568),
    array(0,2,14,46400),array(0,2,3,54944),array(2,1,23,38608),array(0,2,11,38320),array(7,2,1,18872),array(0,2,20,18800),
    array(0,2,8,42160),array(5,1,28,45656),array(0,2,16,27216),array(0,2,5,27968),array(4,1,24,44456),array(0,2,13,11104),
    array(0,2,2,38256),array(2,1,23,18808),array(0,2,10,18800),array(6,1,30,25776),array(0,2,17,54432),array(0,2,6,59984),
    array(5,1,26,27976),array(0,2,14,23248),array(0,2,4,11104),array(3,1,24,37744),array(0,2,11,37600),array(7,1,31,51560),
    array(0,2,19,51536),array(0,2,8,54432),array(6,1,27,55888),array(0,2,15,46416),array(0,2,5,22176),array(4,1,25,43736),
    array(0,2,13,9680),array(0,2,2,37584),array(2,1,22,51544),array(0,2,10,43344),array(7,1,29,46248),array(0,2,17,27808),
    array(0,2,6,46416),array(5,1,27,21928),array(0,2,14,19872),array(0,2,3,42416),array(3,1,24,21176),array(0,2,12,21168),
    array(8,1,31,43344),array(0,2,18,59728),array(0,2,8,27296),array(6,1,28,44368),array(0,2,15,43856),array(0,2,5,19296),
    array(4,1,25,42352),array(0,2,13,42352),array(0,2,2,21088),array(3,1,21,59696),array(0,2,9,55632),array(7,1,30,23208),
    array(0,2,17,22176),array(0,2,6,38608),array(5,1,27,19176),array(0,2,15,19152),array(0,2,3,42192),array(4,1,23,53864),
    array(0,2,11,53840),array(8,1,31,54568),array(0,2,18,46400),array(0,2,7,46752),array(6,1,28,38608),array(0,2,16,38320),
    array(0,2,5,18864),array(4,1,25,42168),array(0,2,13,42160),array(10,2,2,45656),array(0,2,20,27216),array(0,2,9,27968),
    array(6,1,29,44448),array(0,2,17,43872),array(0,2,6,38256),array(5,1,27,18808),array(0,2,15,18800),array(0,2,4,25776),
    array(3,1,23,27216),array(0,2,10,59984),array(8,1,31,27432),array(0,2,19,23232),array(0,2,7,43872),array(5,1,28,37736),
    array(0,2,16,37600),array(0,2,5,51552),array(4,1,24,54440),array(0,2,12,54432),array(0,2,1,55888),array(2,1,22,23208),
    array(0,2,9,22176),array(7,1,29,43736),array(0,2,18,9680),array(0,2,7,37584),array(5,1,26,51544),array(0,2,14,43344),
    array(0,2,3,46240),array(4,1,23,46416),array(0,2,10,44368),array(9,1,31,21928),array(0,2,19,19360),array(0,2,8,42416),
    array(6,1,28,21176),array(0,2,16,21168),array(0,2,5,43312),array(4,1,25,29864),array(0,2,12,27296),array(0,2,1,44368),
    array(2,1,22,19880),array(0,2,10,19296),array(6,1,29,42352),array(0,2,17,42208),array(0,2,6,53856),array(5,1,26,59696),
    array(0,2,13,54576),array(0,2,3,23200),array(3,1,23,27472),array(0,2,11,38608),array(11,1,31,19176),array(0,2,19,19152),
    array(0,2,8,42192),array(6,1,28,53848),array(0,2,15,53840),array(0,2,4,54560),array(5,1,24,55968),array(0,2,12,46496),
    array(0,2,1,22224),array(2,1,22,19160),array(0,2,10,18864),array(7,1,30,42168),array(0,2,17,42160),array(0,2,6,43600),
    array(5,1,26,46376),array(0,2,14,27936),array(0,2,2,44448),array(3,1,23,21936),array(0,2,11,37744),array(8,2,1,18808),
    array(0,2,19,18800),array(0,2,8,25776),array(6,1,28,27216),array(0,2,15,59984),array(0,2,4,27424),array(4,1,24,43872),
    array(0,2,12,43744),array(0,2,2,37600),array(3,1,21,51568),array(0,2,9,51552),array(7,1,29,54440),array(0,2,17,54432),
    array(0,2,5,55888),array(5,1,26,23208),array(0,2,14,22176),array(0,2,3,42704),array(4,1,23,21224),array(0,2,11,21200),
    array(8,1,31,43352),array(0,2,19,43344),array(0,2,7,46240),array(6,1,27,46416),array(0,2,15,44368),array(0,2,5,21920),
    array(4,1,24,42448),array(0,2,12,42416),array(0,2,2,21168),array(3,1,22,43320),array(0,2,9,26928),array(7,1,29,29336),
    array(0,2,17,27296),array(0,2,6,44368),array(5,1,26,19880),array(0,2,14,19296),array(0,2,3,42352),array(4,1,24,21104),
    array(0,2,10,53856),array(8,1,30,59696),array(0,2,18,54560),array(0,2,7,55968),array(6,1,27,27472),array(0,2,15,22224),
    array(0,2,5,19168),array(4,1,25,42216),array(0,2,12,42192),array(0,2,1,53584),array(2,1,21,55592),array(0,2,9,54560)
);

$hour = array(
    '1' =>  '子时 (23 ~ 1)',
    '2' =>  '丑时 (1 ~ 3)',
    '3' =>  '寅时 (3 ~ 5)',
    '4' =>  '卯时 (5 ~ 7)',
    '5' =>  '辰时 (7 ~ 9)',
    '6' =>  '巳时 (9 ~ 11)',
    '7' =>  '午时 (11 ~ 13)',
    '8' =>  '未时 (13 ~ 15)',
    '9' =>  '申时 (15 ~ 17)',
    '10' =>  '酉时 (17 ~ 19)',
    '11' =>  '戌时 (19 ~ 21)',
    '12' =>  '亥时 (21 ~ 23)',
);

define('YEARGAN',json_encode($yearGan));    // 六十甲子年
define('MONTHGAN',json_encode($monthGan));    // 六十甲子月
define('TIANGAN',json_encode($tianGan));    // 十天干
define('DIZHI',json_encode($diZhi));    // 十二地支
define('DATAINFO',json_encode($dataInfo));    // 农历十六进制数据
define('ANIMALS',json_encode($animals));    // 十二生肖
define('LUNARINFO',json_encode($lunarInfo));
define('HOUR',json_encode($hour));    // 时辰
