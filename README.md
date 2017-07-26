<h1 align = 'center'>Sign Language Tool</h1>

## Introduction
This project helps the disabled people to understand alphabetical input and turns it into an animated sign language (Indian Sign Language)
It also has image processing feeds that will help in translating sign language into English alphabets. The project comprises of three modules: **_Learn, Practice and Test_**. These Modules will help you in learning the basics of the Indian Sign Language.  

You can view the [_Project Report_](http://ekalavya.it.iitb.ac.in/summerinternship2017/nologin_download.html?fileName=Gesture_Based_App_for_Sign_Language.pdf&fileType=report) and the [_Project Presentation_](http://ekalavya.it.iitb.ac.in/summerinternship2017/nologin_download.html?fileName=Gesture_Based_App_for_Sign_Language.pptx&fileType=presentation), IIT Bombay Summer Internship Eklavya 2017.

#### The Learn Module
Learn Module helps you to learn the Sign Language Alphabet Gestures. This can be accessed in two ways:
  1. Windows App (Zip file in models).
  2. Web App ([Link](http://fingerspelling.herokuapp.com)).

#### The Practice & Test Modules
These modules help you to test the gestures that you have performed using the webcam interface. You will need to install Python and Python packages that are mentioned [further](#installations).  
To run, simply execute the python file of the required alphabet.

## Tech Stack
The animations are done using Blender & Blender Game Engine.
The image processing is done using Python.

## Installations
1. Install Blender if you want to modify the models.
2. Install Python.
3. Install additional Python Packages OpenCV, MatPlotLib and Numpy
```
You can also use pip to install OpenCV, MatPlotLib and Numpy.  
Simply follow these instructions.
├── pip install numpy
├── pip install matplotlib
└── pip install opencv-python
```
4. Linux users can also run the Linux_Installation.sh.  
Please note this installation requires **sudo permissions**

>Those who wish to train haar cascades can visit My Drive [Link](https://drive.google.com/drive/folders/0Bw0n8xghCUhoN1ZEM0Y3bVF0ZjA?usp=sharing) to get the negative samples.  
>There is a Bash file in folder "A" that has the commands to run the training process.
