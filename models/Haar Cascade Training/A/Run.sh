mkdir info data
opencv_createsamples -img A\ clean.png -bg bg.txt -info info/info.lst -pngoutput -maxxangle 0.5 -maxyangle 0.5 -num 2500
opencv_createsamples -info info/info.lst -num 2500 -w 70 -h 70 -vec positives.vec
gnome-terminal -e htop
opencv_traincascade -data data -vec positives.vec -bg bg.txt -numPos 2000 -numNeg 1000 -numStages 15 -w 70 -h 70 -precalcValBufSize 3000 -precalcIdxBufSize 3000
