import cv2
import numpy as np
import matplotlib as plt

#To capture video frame
cap = cv2.VideoCapture(0)

#Keep on capturing video
while True:
	ret, frame = cap.read()
	cv2.imshow('frame', frame)
	#Quit only if q is pressed
	if cv2.waitKey(1) & 0xFF == ord('q'):
		break
cap.release()
cap.destroyAllWindows()