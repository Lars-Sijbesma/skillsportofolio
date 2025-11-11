import datetime
import time
import schedule

def function():
    print("Biep!")


current_time = datetime.datetime.now()
wait_time = 60 - current_time.second
time.sleep(wait_time)

schedule.every(1).minutes.do(function)
function()

while True:
    schedule.run_pending()
    time.sleep(1)
