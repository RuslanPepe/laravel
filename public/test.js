      let btn = document.getElementsByClassName('deleteImg')
      const photoImgs = document.getElementById('photoLoadImage')
      let photo = document.getElementsByClassName('imgCollection')
      let btnRight = document.getElementById('btnRightScrollPhoto')
      let date = new Date()
      let widthPhotoList = 0
      let photoImg
      let photoImgAll = new Map()
      const regI = /image/;
      let timeStamp = []

      console.log(3)

      for (let z = 0; z < photoImgs.files.length; z++) {
        console.log(photoImgs.files[z])
        if (regI.test(photoImgs.files[z].type)){
          photoImgAll[z] = new File([photoImgs.files[z]], timeStamp[z] = date.getMilliseconds()+date.getDate()*Math.random(7,99)+'.'+photoImgs.files[z].type.replace('image/', ''))
          this.photoImgsAll.set(photoImgAll[z].name, photoImgAll[z])
        }
      }

        for (let r = 0; r < photoImgs.files.length; r++) {
          //photo
          if (photoImgs.files.length > 0 && regI.test(photoImgs.files[r].type)){
            photoImg = new File([photoImgs.files[r]],  date.getMilliseconds()+date.getDate()*Math.random(7,99)+'.'+photoImgs.files[r].type.replace('image/', ''))
            const readFile = new FileReader()
            readFile.readAsDataURL(photoImgs.files[r])

            for (let i = 0; i < btn.length; i++) {btn[i].style.display = 'none'} //отключение кнопок делит

            readFile.onload = () => {
              for (let i = 0; i < photo.length; i++) {
                widthPhotoList += photo[i].width+25
              }
              let img = new Image()
              img.src = readFile.result
              img.onload = () => {
                img.width = img.width / (img.height / 120)
                if (img.width+widthPhotoList > 780){
                  btnRight.style.display = 'inline-block'
                }
              }
              if (widthPhotoList > 780){
                btnRight.style.display = 'inline-block'
              }
              // this.dataPhotoLoad[photoImgAll[r]['name']] = readFile.result
              this.photoImgsAll.set(timeStamp[r], readFile.result)

            }
          }
        }

      photoImgs.value = ''
