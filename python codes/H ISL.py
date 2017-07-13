import cv2
import numpy as np

# Get the cascade classifer
# Cascade Credits Tejas Nanaware
# Note the gestures are trained upto 15 stages and minimum 10 stages
A_cascade = cv2.CascadeClassifier('..\models\Haar Cascade Training\H\data\cascade.xml')

cap = cv2.VideoCapture(0)

# To record the video
# fourcc = cv2.VideoWriter_fourcc(*'XVID')
# out = cv2.VideoWriter('A gesture detected.avi', fourcc, 10.0, (640,480))
while True:
	ret, img = cap.read()
	#flip video
	img = cv2.flip(img, 1)
	#converting to gray
	gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
	# detect A
	A = A_cascade.detectMultiScale(gray)

	# To display A
	for (x,y,w,h) in A:
		cv2.rectangle(img, (x, y), (x + w, y + h), (255, 0, 0), 2)
		font = cv2.FONT_HERSHEY_SIMPLEX
		cv2.putText(img,'H',(x,y+h), font, 4, (0,0,255), 3, cv2.LINE_AA)

	# To record the video
	# out.write(img)		
	# Display video & Exit procedure
	cv2.imshow('img', img)
	key = cv2.waitKey(1) & 0xFF
	if key == 27:
		break

# Necessary Exit Procedure
# out.release() # To record the video
cap.release()
cv2.destroyAllWindows()