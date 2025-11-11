import websocket
import json
import threading

robot = "192.168.2.197"

def on_message(ws, message):
    print("Received:", message)

def on_error(ws, error):
    print("Error:", error)

def on_close(ws, close_status_code, close_msg):
    print("Connection closed")

def on_open(ws):
    ws.send(json.dumps({"type": "connect", "robot": robot}))
    while True:
        data = json.loads(input())
        data["robot"] = robot
        ws.send(json.dumps(data))

if __name__ == "__main__":
    ws = websocket.WebSocketApp(
        # "ws://192.168.2.168:9000",
        "ws://127.0.0.1:9000",
        on_message=on_message,
        on_error=on_error,
        on_close=on_close,
    )
    ws.on_open = on_open
    ws.run_forever()