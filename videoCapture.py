import cv2
import numpy as np
import matplotlib as plt

#To capture video frame
cap = cv2.VideoCapture(0)

#save video
fourcc = cv2.VideoWriter_fourcc(*'XVID')
out = cv2.VideoWriter('out.avi', fourcc, 20.0, (640,480))

#Keep on capturing video
while True:
	ret, frame = cap.read()

	#For putting filters and displaying multiple frames
	gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
	out.write(frame)
	cv2.imshow('frame', frame)
	cv2.imshow('gray', gray)
	#Quit only if q is pressed
	if cv2.waitKey(1) & 0xFF == ord('q'):
		break
cap.release()
out.release()
cap.destroyAllWindows()