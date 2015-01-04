//source: http://mongoosejs.com/docs/populate.html

var mongoose = require('mongoose')
 , Schema = mongoose.Schema

var PersonSchema = new Schema({
  name    : String
  , age     : Number
  , stories : [{ type: Schema.ObjectId, ref: 'Story' }]
});

var StorySchema = new Schema({
  _creator : { type: Schema.ObjectId, ref: 'Person' }
  , title    : String
  , fans     : [{ type: Schema.ObjectId, ref: 'Person' }]
});

var Story  = mongoose.model('Story', StorySchema);
var Person = mongoose.model('Person', PersonSchema);