const person = {
  greet : function greet2(){
    console.log('greeting')
    console.log(this.greet.toString())
  }
}
person.greet()