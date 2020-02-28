<?php

namespace hmmhmmmm\gameevent\data;

use hmmhmmmm\gameevent\GameEvent;

use pocketmine\utils\Config;

class Language{
   private $plugin = null;
   private $data = null;
   private $lang = "?";
   
   private $langEnglish = [
      "reset" => false,
      "notfound.plugin" => "§cThis plugin will not work. Please install the plugin %s",
      "notfound.libraries" => "§cLibraries %s not found",
      "plugininfo.name" => "§fName plugin %s",
      "plugininfo.version" => "§fVersion %s",
      "plugininfo.author" => "§fList of creators %s",
      "plugininfo.description" => "§fDescription of the plugin. §eis a plugin free. Please do not sell. If you redistribute it, please credit the creator. :)",
      "plugininfo.facebook" => "§fFacebook %s",
      "plugininfo.youtube" => "§fYoutube %s",
      "plugininfo.website" => "§fWebsite %s",
      "plugininfo.discord" => "§fDiscord %s",
      "event.title" => "Event",
      "event.without" => "§cWithout event",
      "event.notfound" => "§cNot found event %s",
      "event.off" => "§cThe event has shut down.",
      "sign.award.noprefix" => "[GetAward]",
      "sign.award.prefix" => "§b[§eGetAward§b]",
      "sendtime.msgday" => "d.",
      "sendtime.msghours" => "h.",
      "sendtime.msgminutes" => "m.",
      "sendtime.msgseconds" => "s.",
      "makeslapper" => "§aSlapper have been created successfully.",
      "enabledevent.on" => "§a %s Has begun!",
      "enabledevent.off" => "§c %s Has ended!",
      "infostartevent.on" => "\n§fEvent %s\nNow §aTurned on\nExplain: %s\n§fTime left §e%s\n§fAward §d%s",
      "infostartevent.off" => "\n§fEvent %s\nNow §cIs closed",
      "infoawardevent.on" => "\nYou have do an event §a%s §fsuccessfully\n§fClick to receive the award §b%s",
      "infoawardevent.off" => "\n§fEvent %s\nNow §cIs closed",
      "playerstartevent.error1" => "§cYou have already done this event.",
      "playerstartevent.welcome" => "Welcome to the event %s Will end in §b%s §fWhen you complete the event, you will receive a reward §d%s",
      "playerawardevent.error1" => "§cYou have already done this event.",
      "playerawardevent.complete" => "The players %s have do event %s successfully and awards §b%s",
      "gameevent.command.consoleError" => "§cSorry: commands can be typed only in the game.",
      "gameevent.command.permissionError" => "§cSorry: you cannot type this command.",
      "gameevent.command.sendHelp.empty" => "§eYou can see more commands by typing /gameevent help",
      "gameevent.command.info.usage" => "/gameevent info",
      "gameevent.command.info.description" => "§fCredit for the plugin creator",
      "gameevent.command.create.usage" => "/gameevent create <NameTheEvent> <Time> <DescriptionText> <AwardMessage>",
      "gameevent.command.create.description" => "§fCreate an Event",
      "gameevent.command.create.error1" => "§cTry: %s",
      "gameevent.command.create.error2" => "§cEvent %s Already exists",
      "gameevent.command.create.error3" => "§c<Time> Please write as numbers.",
      "gameevent.command.create.complete" => "§aPlease type the command start in chat.",
      "gameevent.command.list.usage" => "/gameevent list",
      "gameevent.command.list.description" => "§fSee a list of all event.",
      "gameevent.command.list.error1" => "§cNo event list",
      "gameevent.command.list.complete" => "List of all event §b%s",
      "gameevent.command.remove.usage" => "/gameevent remove <EventName>",
      "gameevent.command.remove.description" => "§fDelete event",
      "gameevent.command.remove.error1" => "§cTry: %s",
      "gameevent.command.remove.error2" => "§cEvent name not found %s",
      "gameevent.command.remove.complete" => "§aHas deleted the event %s successfully",
      "gameevent.command.settime.usage" => "/gameevent settime <EventName> <Time>",
      "gameevent.command.settime.description" => "§fSet event times",
      "gameevent.command.settime.error1" => "§cTry: %s",
      "gameevent.command.settime.error2" => "§cEvent name not found %s",
      "gameevent.command.settime.error3" => "§c<Time> Please write as numbers.",
      "gameevent.command.settime.complete" => "§aHas set time the event %s are %s successfully",
      "gameevent.command.setpresent.usage" => "/gameevent setpresent <EventName>",
      "gameevent.command.setpresent.description" => "§fSet is the present event",
      "gameevent.command.setpresent.error1" => "§cTry: %s",
      "gameevent.command.setpresent.error2" => "§cEvent name not found %s",
      "gameevent.command.setpresent.complete" => "§aHas set %s is the present event successfully",
      "gameevent.command.setnext.usage" => "/gameevent setnext <EventName>",
      "gameevent.command.setnext.description" => "§fSet is the next event",
      "gameevent.command.setnext.error1" => "§cTry: %s",
      "gameevent.command.setnext.error2" => "§cEvent name not found %s",
      "gameevent.command.setnext.complete" => "§aHas set %s is the next event successfully",
      "gameevent.command.enabled.usage" => "/gameevent enabled <EventName> on|off",
      "gameevent.command.enabled.description" => "§fEnabled/Disable of event",
      "gameevent.command.enabled.error1" => "§cTry: %s",
      "gameevent.command.enabled.error2" => "§cEvent name not found %s",
      "gameevent.command.enabled.error3" => "§cYou will not be able to enabled this event if you have not set the event %s is a present event",
      "gameevent.command.start.usage" => "/gameevent start <PlayerName> <EventName>",
      "gameevent.command.start.description" => "§fHave players start the event",
      "gameevent.command.start.error1" => "§cTry: %s",
      "gameevent.command.start.error2" => "§cPlayer name not found or player not online",
      "gameevent.command.start.error3" => "§cEvent name not found %s",
      "gameevent.command.start.error4" => "§cThe event has ended.",
      "gameevent.command.award.usage" => "/gameevent award <PlayerName> <EventName>",
      "gameevent.command.award.description" => "§fAdd players to receive event rewards.",
      "gameevent.command.award.error1" => "§cTry: %s",
      "gameevent.command.award.error2" => "§cPlayer name not found or player not online",
      "gameevent.command.award.error3" => "§cEvent name not found %s",
      "gameevent.command.award.error4" => "§cThe event has ended.",
      "gameevent.command.signstart.usage" => "/gameevent sign_start <EventName>",
      "gameevent.command.signstart.description" => "§fCreate a sign to start an event",
      "gameevent.command.signstart.error1" => "§cTry: %s",
      "gameevent.command.signstart.error2" => "§cEvent name not found %s",
      "gameevent.command.signstart.complete" => "Please click on the sign to create.",
      "gameevent.command.signaward.usage" => "/gameevent sign_award <EventName>",
      "gameevent.command.signaward.description" => "§fCreate a sign to award event",
      "gameevent.command.signaward.error1" => "§cTry: %s",
      "gameevent.command.signaward.error2" => "§cEvent name not found %s",
      "gameevent.command.signaward.complete" => "Please click on the sign to create.",
      "gameevent.command.slapperstart.usage" => "/gameevent slapper_start <EventName>",
      "gameevent.command.slapperstart.description" => "§fCreate a slapper to start an event",
      "gameevent.command.slapperstart.error1" => "§cTry: %s",
      "gameevent.command.slapperstart.error2" => "§cEvent name not found %s",
      "gameevent.command.slapperaward.usage" => "/gameevent slapper_award <EventName>",
      "gameevent.command.slapperaward.description" => "§fCreate a slapper to award event",
      "gameevent.command.slapperaward.error1" => "§cTry: %s",
      "gameevent.command.slapperaward.error2" => "§cEvent name not found %s",
      "gameevent.command.welcome.usage" => "/gameevent welcome <EventName>",
      "gameevent.command.welcome.description" => "§fEnabled/Disable Message welcome of event",
      "gameevent.command.welcome.error1" => "§cTry: %s",
      "gameevent.command.welcome.error2" => "§cEvent name not found %s",
      "gameevent.command.welcome.on" => "The Event %s Has §aEnabled §fMessage welcome",
      "gameevent.command.welcome.off" => "The Event %s Has §cDisable §fMessage welcome",
      "listener.playerchat.create.event.commandstart1" => "Command start §b%s",
      "listener.playerchat.create.event.commandstart2" => "Please print the command award.",
      "listener.playerchat.create.event.commandaward1" => "Command award §e%s",
      "listener.playerchat.create.event.complete" => "§aEvent %s Successfully create",
      "listener.playerchat.create.event.error1" => "§cEvent %s Will not be created because it is not found %s",
      "listener.playerinteract.create.signstart.complete" => "§aThe event start sign was successfully created.",
      "listener.playerinteract.create.signstart.error1" => "§cPlease click on the sign",
      "listener.playerinteract.create.signaward.complete" => "§aThe event award sign was successfully created.",
      "listener.playerinteract.create.signaward.error1" => "§cPlease click on the sign",
      "scheduler.runsignevent.sign.timeon" => "§fLeft §a%s",
      "scheduler.runsignevent.sign.award" => "§fAward §b%s",
      "scheduler.runevent.new" => "§fAnd will start a new event §a%s",
      "scheduler.runevent.willend" => "Event %s Will end in §b%s %s",
      "scheduler.runevent.end" => "Event %s §chas shut down.",
      "form.menu.button1" => "§aCreate an event",
      "form.create.input1" => "§eNameTheEvent",
      "form.create.input2" => "§eTime (second)",
      "form.create.input3" => "§eDescriptionText",
      "form.create.input4" => "§eAwardMessage",
      "form.create.input5" => "§eCommandStart",
      "form.create.input6" => "§eCommandAward",
      "form.create.error1" => "§cAn error has occurred\n§e<%s> Please enter the name of the event.",
      "form.create.error2" => "§cAn error has occurred\n§e<%s> Event name %s Already exists",
      "form.create.error3" => "§cAn error has occurred\n§e<%s> Required and please write in numbers",
      "form.create.error4" => "§cAn error has occurred\n§e<%s> Need to put",
      "form.edit.info.on" => "§aTurned on",
      "form.edit.info.off" => "§cIs closed",
      "form.edit.info.yes" => "§aYes",
      "form.edit.info.no" => "§cNo",
      "form.edit.content" => "§fEvent information §e%s\n§fstatus %s\n§fIs a present event %s\n§fIs a next event %s\n§fTime set §b%s",
      "form.edit.button1" => "§fEdit event",
      "form.edit.button2" => "§aEnabled§f/§cDisable §fthe event",
      "form.edit.button3" => "§fSet is the present event",
      "form.edit.button4" => "§fSet is the next event",
      "form.edit.button5" => "§fSet event times",
      "form.edit.button6" => "§fCreate a sign to start an event",
      "form.edit.button7" => "§fCreate a sign to award event",
      "form.edit.button8" => "§fCreate a slapper to start an event",
      "form.edit.button9" => "§fCreate a slapper to award event",
      "form.edit.button10" => "§aEnabled§f/§cDisable §fMessage welcome",
      "form.edit.button11" => "§c[Delete the event]",
      "form.edit2.complete" => "§aEvent %s Has successfully fixed",
      "form.remove.content" => "§fAre you sure? To delete event §a%s",
      "form.remove.yes" => "§aYes",
      "form.remove.no" => "§cNo"
      
   ];
   
   private $langThai = [
      "reset" => false,
      "notfound.plugin" => "§cปลั๊กนี้จะไม่ทำงาน กรุณาลงปลั๊กอิน %s",
      "notfound.libraries" => "§cไม่พบไลบรารี %s",
      "plugininfo.name" => "§fปลั๊กอินชื่อ %s",
      "plugininfo.version" => "§fเวอร์ชั่น %s",
      "plugininfo.author" => "§fรายชื่อผู้สร้าง %s",
      "plugininfo.description" => "§fคำอธิบายของปลั๊กอิน §eเป็นปลั๊กอินทำแจกกรุณาอย่าเอาไปขาย ถ้าจะแจกต่อโปรดให้เครดิตผู้สร้างด้วย :)",
      "plugininfo.facebook" => "§fเฟสบุ๊ค %s",
      "plugininfo.youtube" => "§fยูทูป %s",
      "plugininfo.website" => "§fเว็บไซต์ %s",
      "plugininfo.discord" => "§fดิสคอร์ด %s",
      "plugininfo.discord" => "§fดิสคอร์ด %s",
      "event.title" => "กิจกรรม",
      "event.without" => "§cไม่มีกิจกรรม",
      "event.notfound" => "§cไม่พบกิจกรรม %s",
      "event.off" => "§cกิจกรรมได้จบลงแล้ว",
      "sign.award.noprefix" => "[คลิกเพื่อรับรางวัล]",
      "sign.award.prefix" => "§b[§eคลิกเพื่อรับรางวัล§b]",
      "sendtime.msgday" => "ว.",
      "sendtime.msghours" => "ชม.",
      "sendtime.msgminutes" => "น.",
      "sendtime.msgseconds" => "วิ.",
      "makeslapper" => "§aหุ่นกิจกรรมได้สร้างสำเร็จ",
      "enabledevent.on" => "§a %s ได้เริ่มขึ้นแล้ว!",
      "enabledevent.off" => "§c %s ได้จบลงแล้ว!",
      "infostartevent.on" => "\n§fกิจกรรม %s\nตอนนี้ §aเปิดอยู่\nอธิบาย: %s\n§fเหลือเวลาอีก §e%s\n§fรางวัล §d%s",
      "infostartevent.off" => "\n§fกิจกรรม %s\nตอนนี้ §cปิดอยู่",
      "infoawardevent.on" => "\nคุณได้ทำกิจกรรม §a%s §fสำเร็จ\n§fคลิกเพื่อรับรางวัล §b%s",
      "infoawardevent.off" => "\n§fกิจกรรม %s\nตอนนี้ §cปิดอยู่",
      "playerstartevent.error1" => "§cคุณได้ทำกิจกรรมนี้แล้ว",
      "playerstartevent.welcome" => "ยินดีต้อนรับเข้าสู่กิจกรรม %s จะจบในอีก §b%s §fเมื่อคุณทำกิจกรรมสำเร็จคุณจะได้รับรางวัล §d%s",
      "playerawardevent.error1" => "§cคุณได้ทำกิจกรรมนี้แล้ว",
      "playerawardevent.complete" => "ผู้เล่น %s ได้ทำกิจกรรม %s สำเร็จและได้รับรางวัล §b%s",
      "gameevent.command.consoleError" => "§cขออภัย: คำสั่งสามารถพิมพ์ได้เฉพาะในเกมส์",
      "gameevent.command.permissionError" => "§cขออภัย: คุณไม่สามารถพิมพ์คำสั่งนี้ได้",
      "gameevent.command.sendHelp.empty" => "§eคุณสามารถดูคำสั่งเพิ่มเติมได้โดยพิมพ์ /gameevent help",
      "gameevent.command.info.usage" => "/gameevent info",
      "gameevent.command.info.description" => "§fเครดิตผู้สร้างปลั๊กอิน",
      "gameevent.command.create.usage" => "/gameevent create <ชื่อกิจกรรม> <เวลา> <ข้อความอธิบาย> <ข้อความรางวัล>",
      "gameevent.command.create.description" => "§fสร้างกิจกรรม",
      "gameevent.command.create.error1" => "§cลอง: %s",
      "gameevent.command.create.error2" => "§cกิจกรรม %s มีอยู่แล้ว",
      "gameevent.command.create.error3" => "§c<เวลา> กรุณาเขียนให้เป็นตัวเลข",
      "gameevent.command.create.complete" => "§aกรุณาพิมคำสั่งสตาร์ทในแชท",
      "gameevent.command.list.usage" => "/gameevent list",
      "gameevent.command.list.description" => "§fดูรายชื่อกิจกรรม",
      "gameevent.command.list.error1" => "§cไม่มีรายชื่อกิจกรรม",
      "gameevent.command.list.complete" => "รายชื่อกิจกรรมทั้งหมด §b%s",
      "gameevent.command.remove.usage" => "/gameevent remove <ชื่อกิจกรรม>",
      "gameevent.command.remove.description" => "§fลบกิจกรรม",
      "gameevent.command.remove.error1" => "§cลอง: %s",
      "gameevent.command.remove.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.remove.complete" => "§aได้ลบกิจกรรม %s สำเร็จ!",
      "gameevent.command.settime.usage" => "/gameevent settime <ชื่อกิจกรรม> <เวลา>",
      "gameevent.command.settime.description" => "§fเช็ตเวลากิจกรรม",
      "gameevent.command.settime.error1" => "§cลอง: %s",
      "gameevent.command.settime.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.settime.error3" => "§c<เวลา> กรุณาเขียนให้เป็นตัวเลข",
      "gameevent.command.settime.complete" => "§aได้เช็ตเวลากิจกรรม %s เป็น %s เรียบร้อย!",
      "gameevent.command.setpresent.usage" => "/gameevent setpresent <ชื่อกิจกรรม>",
      "gameevent.command.setpresent.description" => "§fเช็ตเป็นกิจกรรมปัจจุบัน",
      "gameevent.command.setpresent.error1" => "§cลอง: %s",
      "gameevent.command.setpresent.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.setpresent.complete" => "§aได้เช็ต %s เป็นกิจกรรมปัจจุบันเรียบร้อย!",
      "gameevent.command.setnext.usage" => "/gameevent setnext <ชื่อกิจกรรม>",
      "gameevent.command.setnext.description" => "§fเช็ตเป็นกิจกรรมถัดไป",
      "gameevent.command.setnext.error1" => "§cลอง: %s",
      "gameevent.command.setnext.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.setnext.complete" => "§aได้เช็ต %s เป็นกิจกรรมถัดไปเรียบร้อย!",
      "gameevent.command.enabled.usage" => "/gameevent enabled <ชื่อกิจกรรม> on|off",
      "gameevent.command.enabled.description" => "§fเปิด/ปิดกิจกรรม",
      "gameevent.command.enabled.error1" => "§cลอง: %s",
      "gameevent.command.enabled.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.enabled.error3" => "§cคุณจะไม่สามารถเปิดกิจกรรมนี้ได้หากคุณไม่ได้เช็ตกิจกรรม %s เป็นกิจกรรมปัจจุบัน",
      "gameevent.command.start.usage" => "/gameevent start <ชื่อผู้เล่น> <ชื่อกิจกรรม>",
      "gameevent.command.start.description" => "§fให้ผู้เล่นเริ่มทำกิจกรรม",
      "gameevent.command.start.error1" => "§cลอง: %s",
      "gameevent.command.start.error2" => "§cไม่พบชื่อผู้เล่นหรือผู้เล่นไม่ได้ออนไลน์",
      "gameevent.command.start.error3" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.start.error4" => "§cกิจกรรมได้จบลงแล้ว",
      "gameevent.command.award.usage" => "/gameevent award <ชื่อผู้เล่น> <ชื่อกิจกรรม>",
      "gameevent.command.award.description" => "§fเพิ่มผู้เล่นรับรางวัลกิจกรรม",
      "gameevent.command.award.error1" => "§cลอง: %s",
      "gameevent.command.award.error2" => "§cไม่พบชื่อผู้เล่นหรือผู้เล่นไม่ได้ออนไลน์",
      "gameevent.command.award.error3" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.award.error4" => "§cกิจกรรมได้จบลงแล้ว",
      "gameevent.command.signstart.usage" => "/gameevent sign_start <ชื่อกิจกรรม>",
      "gameevent.command.signstart.description" => "§fสร้างป้ายเริ่มกิจกรรม",
      "gameevent.command.signstart.error1" => "§cลอง: %s",
      "gameevent.command.signstart.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.signstart.complete" => "กรุณาคลิกที่ป้ายเพื่อสร้าง",
      "gameevent.command.signaward.usage" => "/gameevent sign_award <ชื่อกิจกรรม>",
      "gameevent.command.signaward.description" => "§fสร้างป้ายรับรางวัลกิจกรรม",
      "gameevent.command.signaward.error1" => "§cลอง: %s",
      "gameevent.command.signaward.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.signaward.complete" => "กรุณาคลิกที่ป้ายเพื่อสร้าง",
      "gameevent.command.slapperstart.usage" => "/gameevent slapper_start <ชื่อกิจกรรม>",
      "gameevent.command.slapperstart.description" => "§fสร้างหุ่นเริ่มกิจกรรม",
      "gameevent.command.slapperstart.error1" => "§cลอง: %s",
      "gameevent.command.slapperstart.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.slapperaward.usage" => "/gameevent slapper_award <ชื่อกิจกรรม>",
      "gameevent.command.slapperaward.description" => "§fสร้างหุ่นกิจกรรมรับรางวัล",
      "gameevent.command.slapperaward.error1" => "§cลอง: %s",
      "gameevent.command.slapperaward.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.welcome.usage" => "/gameevent welcome <ชื่อกิจกรรม>",
      "gameevent.command.welcome.description" => "§fเปิด/ปิด ข้อความยินดีต้อนรับของกิจกรรม",
      "gameevent.command.welcome.error1" => "§cลอง: %s",
      "gameevent.command.welcome.error2" => "§cไม่พบชื่อกิจกรรม %s",
      "gameevent.command.welcome.on" => "กิจกรรม %s ได้ §aเปิด §fข้อความยินดีต้อนรับเรียบร้อย!",
      "gameevent.command.welcome.off" => "กิจกรรม %s ได้ §cปิด §fข้อความยินดีต้อนรับเรียบร้อย!",
      "listener.playerchat.create.event.commandstart1" => "คำสั่งสตาร์ท §b%s",
      "listener.playerchat.create.event.commandstart2" => "กรุณาพิมคำสั่งรางวัล",
      "listener.playerchat.create.event.commandaward1" => "คำสั่งรางวัล §e%s",
      "listener.playerchat.create.event.complete" => "§aกิจกรรม %s ได้สร้างสำเร็จ!",
      "listener.playerchat.create.event.error1" => "§cกิจกรรม %s จะไม่ถูกสร้างเพราะไม่พบ %s",
      "listener.playerinteract.create.signstart.complete" => "§aป้ายเริ่มกิจกรรมได้สร้างสำเร็จ!",
      "listener.playerinteract.create.signstart.error1" => "§cกรุณาคลิกที่ป้าย",
      "listener.playerinteract.create.signaward.complete" => "§aป้ายรับรางวัลกิจกรรมได้สร้างสำเร็จ!",
      "listener.playerinteract.create.signaward.error1" => "§cกรุณาคลิกที่ป้าย",
      "scheduler.runsignevent.sign.timeon" => "§fเหลือ §a%s",
      "scheduler.runsignevent.sign.award" => "§fรางวัล §b%s",
      "scheduler.runevent.new" => "§fและจะเริ่มกิจกรรมใหม่ §a%s",
      "scheduler.runevent.willend" => "กิจกรรม %s จะจบลงในอีก §b%s %s",
      "scheduler.runevent.end" => "กิจกรรม %s §cได้จบลงแล้ว",
      "form.menu.button1" => "§aสร้างกิจกรรม",
      "form.create.input1" => "§eตั้งชื่อกิจกรรม",
      "form.create.input2" => "§eเวลา (วินาที)",
      "form.create.input3" => "§eข้อความอธิบาย",
      "form.create.input4" => "§eข้อความรางวัล",
      "form.create.input5" => "§eคำสั่งสตาร์ท",
      "form.create.input6" => "§eคำสั่งรางวัล",
      "form.create.error1" => "§cเกิดข้อผิดพลาด\n§e<%s> กรุณาใส่ชื่อกิจกรรม",
      "form.create.error2" => "§cเกิดข้อผิดพลาด\n§e<%s> ชื่อกิจกรรม %s มีอยู่แล้ว",
      "form.create.error3" => "§cเกิดข้อผิดพลาด\n§e<%s> จำเป็นต้องใส่และกรุณาเขียนให้เป็นตัวเลข",
      "form.create.error4" => "§cเกิดข้อผิดพลาด\n§e<%s> จำเป็นต้องใส่",
      "form.edit.info.on" => "§aเปิดอยู่",
      "form.edit.info.off" => "§cปิดอยู่",
      "form.edit.info.yes" => "§aใช่",
      "form.edit.info.no" => "§cไม่",
      "form.edit.content" => "§fข้อมูลของกิจกรรม §e%s\n§fสถานะ %s\n§fเป็นกิจกรรมปัจจุบัน %s\n§fเป็นกิจกรรมถัดไป %s\n§fเวลาที่เช็ตไว้ §b%s",
      "form.edit.button1" => "§fแก้ไขกิจกรรม",
      "form.edit.button2" => "§aเปิด§f/§cปิด §fกิจกรรม",
      "form.edit.button3" => "§fเซ็ตให้เป็นกิจกรรมปัจจุบัน",
      "form.edit.button4" => "§fเซ็ตให้เป็นกิจกรรมถัดไป",
      "form.edit.button5" => "§fเซ็ตเวลาเดินกิจกรรม",
      "form.edit.button6" => "§fสร้างป้ายเริ่มกิจกรรม",
      "form.edit.button7" => "§fสร้างป้ายรับรางวัลกิจกรรม",
      "form.edit.button8" => "§fสร้างหุ่นเริ่มกิจกรรม",
      "form.edit.button9" => "§fสร้างหุ่นรับรางวัลกิจกรรม",
      "form.edit.button10" => "§aเปิด§f/§cปิด §fข้อความยินดีต้อนรับ",
      "form.edit.button11" => "§c[ลบกิจกรรม]",
      "form.edit2.complete" => "§aกิจกรรม %s ได้แก้ไขสำเร็จ!",
      "form.remove.content" => "§fคุณแน่ใจแล้วใช่มั้ย? ที่จะลบกิจกรรม §a%s",
      "form.remove.yes" => "§aตกลง",
      "form.remove.no" => "§cยกเลิก"
   ];

   public function __construct(GameEvent $plugin, string $lang){
      $this->plugin = $plugin;
      $this->lang = $lang;
      $this->data = new Config($this->plugin->getDataFolder()."language/$this->lang.yml", Config::YAML, array());
      $d = $this->data->getAll();
      if(!isset($d["reset"])){
         $this->reset();
      }else{
         if($d["reset"]){
            $this->reset();
         }
      }
      $this->update();
   }
   public function getPlugin(): GameEvent{
      return $this->plugin;
   }
   public function getData(): Config{
      return $this->data;
   }
   public function getLang(): string{
      return $this->lang;
   }
   public function reset(): void{
      $data = $this->getData();
      if($this->getLang() == "thai"){
         foreach($this->langThai as $key => $value){
            $data->setNested($key, $value);
         }
      }
      if($this->getLang() == "english"){
         foreach($this->langEnglish as $key => $value){
            $data->setNested($key, $value);
         }
      }
      $data->save();
   }
   public function update(): void{
      $data = $this->getData()->getAll();
      
   }
   public function getTranslate(string $key, array $arrayValue = []): string{
      $data = $this->getData();
      
      if(!empty($arrayValue)){
         return vsprintf($data->getNested($key), $arrayValue);
      }
      return $data->getNested($key);
   }
}