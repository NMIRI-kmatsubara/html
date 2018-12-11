#!/usr/bin/python
# -*- coding: utf-8 -*-
  
import smbus, time, csv, datetime

#センサーより温度を取得する
def gettemp():
    i2c = smbus.SMBus(1)
    address = 0x48

    block = i2c.read_i2c_block_data(address, 0x00, 12)
    temp = (block[0] << 8 | block[1]) >> 3
    if(temp >= 4096):
        temp -= 8192
    value = temp/16.0

    return value


#今日の日付のcsvファイルを生成して
#温度を最後尾に追加する

def savetemp():
    fnow = datetime.datetime.now()
    fname ="{0:%Y%m%d}".format(fnow) 
    f = open('/var/www/html/log/' + fname + '.csv' ,'a')

    now = datetime.datetime.now()
    clock ="{0:%H%M}".format(now)
    temp = gettemp()

    csvlist = []
    csvlist.extend([clock,temp])

    writer = csv.writer(f, lineterminator='\n')
    writer.writerow(csvlist)

    f.close()



def main():
    savetemp()

if __name__ == "__main__":
    main()


