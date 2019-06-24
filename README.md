# CycleGAN-android
Style transfer on Android with CycleGAN in TensorFlow, applying remote inference on a php server using [vanhuyz's](https://github.com/vanhuyz/CycleGAN-TensorFlow) implementation.

# Pretrained models
My pretrained models: [Monet](https://mega.nz/#F!vZ51yQBR), [Cezanne](https://mega.nz/#F!iN5xASAK), [Ukyoe](https://mega.nz/#F!mNhj2IJJ), [Vangogh](https://mega.nz/#F!iJxVCCAD).

# Environment
- TensorFlow 1.0.0
- Python 3.6.0
- Android Studio
- MAMP

Currently it is not possible to import the .pb model directly into Android, nor convert it to .tflite because Tensorflow Mobile doesn't support the map_fn node yet. 

Unsupported Lite Ops:
1. NonMaxSuppressionV2
2. TensorArrayGatherV3
3. TensorArrayReadV3
4. TensorArrayScatterV3
5. TensorArraySizeV3
6. TensorArrayV3
7. TensorArrayWriteV3

# Result 

![alt text](https://github.com/matteodalessio/CycleGAN-android/blob/master/pic/collage.jpg)
