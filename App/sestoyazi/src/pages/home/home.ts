import { Component } from '@angular/core';
import { SpeechRecognition, SpeechRecognitionListeningOptionsAndroid, SpeechRecognitionListeningOptionsIOS } from '@ionic-native/speech-recognition';
import { NavController, Platform } from 'ionic-angular';
import { TextToSpeech } from '@ionic-native/text-to-speech'
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';



@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
speechList: Array<string> = [];
bolun: Array<string> = [];
cevap: any;
androidOptions: SpeechRecognitionListeningOptionsAndroid;
iosOptions: SpeechRecognitionListeningOptionsIOS;


  constructor(private tts: TextToSpeech, public http:Http,private platform: Platform,private speech: SpeechRecognition,public navCtrl: NavController) {

  }

  listenForSpeech(): void {

    this.androidOptions = {
    language: 'tr-TR',
    prompt: 'Lütfen mikrofona konuşun'
    }

    this.iosOptions = {
      language: 'tr-TR'
    }

    if (this.platform.is('android')) {
      this.speech.startListening(this.androidOptions).subscribe(data => this.speechList = data, error => console.log(error));

    }
    else if (this.platform.is('ios')) {
      this.speech.startListening(this.iosOptions).subscribe(data => this.speechList =  data, error => console.log(error));
    }
  }


  async getPermission(): Promise<void> {
    try {
      const permission = await this.speech.requestPermission();
      console.log(permission);
      return permission;
    }
    catch (e) {
      console.error(e);
    }
  }


  async gonder()  {
    this.bolun=this.speechList[0].split(" ")
    this.http.get('(Site adresi)/hayri/panel/dapi.php?grd='+this.bolun).map(res => res.json()).subscribe(
      data => {
          this.tts.speak({
              text: data.deger,
              locale: 'tr-Tr',
              rate: 0.75
          });
          this.cevap = data.deger;
      },
      err => {
          this.cevap = "Dediğini anlayamadım";
      }
    );
}
}
