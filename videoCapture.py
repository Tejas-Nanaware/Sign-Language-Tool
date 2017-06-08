import cv2
import numpy as np
import matplotlib as plt

#To capture video frame
cap = cv2.VideoCapture(0)

#save video
# fourcc = cv2.VideoWriter_fourcc(*'XVID')
# out = cv2.VideoWriter('out.avi', fourcc, 10.0, (640,480))

#Keep on capturing video
while True:
	ret, frame = cap.read()

	#flip video
	flip_vid=cv2.flip(frame, 1)

	#For putting filters
	gray = cv2.cvtColor(flip_vid, cv2.COLOR_BGR2GRAY)
	blur = cv2.GaussianBlur(gray,(5,5),0)
	ret,thresh1 = cv2.threshold(blur,1,255,cv2.THRESH_BINARY_INV+cv2.THRESH_OTSU)

	max_area=0
	# finding hand contours
	extras, contours, hierarchy = cv2.findContours(thresh1, cv2.RETR_TREE, cv2.CHAIN_APPROX_SIMPLE)
	
	# largest contour
	for i in range(len(contours)):
		cnt=contours[i]
		area = cv2.contourArea(cnt)
		if(area>max_area):
			max_area=area
			ci=i
	cnt=contours[ci]

	# drawing largest hull
	hull = cv2.convexHull(cnt)
	drawing = np.zeros(frame.shape,np.uint8)
	cv2.drawContours(drawing,[cnt],0,(0,255,0),2)
	cv2.drawContours(drawing,[hull],0,(0,0,255),2)


	#save video
	# out.write(drawing)
	

	# Show frame
	cv2.imshow('frame', drawing)
	cv2.imshow('original', flip_vid)
	
	#Quit only if Esc is pressed
	exit_key = cv2.waitKey(1)
	if exit_key == 27:
		break

# necessary exit things
cap.release()
# save video
# out.release()
cap.destroyAllWindows()