import cv2
import matplotlib as plt
import numpy as np

#get image
img = cv2.imread('watch.jpg', cv2.IMREAD_COLOR)

#IMREAD_GRAYSCALE 0
#IMREAD_COLOR 1
#IMREAD_UNCHANGED -1

#display image using cv2
cv2.imshow('image',img)
cv2.waitKey(0)
cv2.destroyAllWindows()

#display using matplotlib
# plt.imshow(img, cmap='gray', interpolation='bicubic')
# plt.plot([50,100], [100,100], 'c', linewidth=5)
# plt.show()

#write image
cv2.imwrite('watchgray.jpg', img)