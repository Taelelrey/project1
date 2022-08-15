<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="../ckeditor/ckeditor.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/tags.css">
  <title>Document</title>
</head>

<body>
  <!-- connecting form to database -->
  <form action="../database/send_data.php" method="POST">
    <!-- This is where the tag code begins -->
    <div class="container">
      Press enter after you typed.
      <br />
      <br />
      <div class="tag-container">
        <input name="tag" id="tag"/>
        <script>
          const tagContainer = document.querySelector('.tag-container');
          const input = document.querySelector('.tag-container input');

          let tags = [];

          function createTag(label) {
            const div = document.createElement('div');
            div.setAttribute('class', 'tag');
            const span = document.createElement('span');
            span.innerHTML = label;
            const closeIcon = document.createElement('i');
            closeIcon.innerHTML = 'close';
            closeIcon.setAttribute('class', 'material-icons');
            closeIcon.setAttribute('data-item', label);
            div.appendChild(span);
            div.appendChild(closeIcon);
            return div;
          }

          function clearTags() {
            document.querySelectorAll('.tag').forEach(tag => {
              tag.parentElement.removeChild(tag);
            });
          }

          function addTags() {
            clearTags();
            tags.slice().reverse().forEach(tag => {
              tagContainer.prepend(createTag(tag));
            });
          }

          input.addEventListener('keyup', (e) => {
            if (e.key === 'Enter') {
              e.target.value.split(',').forEach(tag => {
                tags.push(tag);
              });

              addTags();
              input.value = '';
            }
          });
          document.addEventListener('click', (e) => {
            console.log(e.target.tagName);
            if (e.target.tagName === 'I') {
              const tagLabel = e.target.getAttribute('data-item');
              const index = tags.indexOf(tagLabel);
              tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
              addTags();
            }
          })

          input.focus();
        </script>
      </div>

    </div>
    <!-- This is where the text editor code begins -->
    <textarea name="editor1" id="editor1" cols="80" rows="10">

    </textarea>
    <script>
      CKEDITOR.replace('editor1');
      var data = CKEDITOR.instances.editor1.getData();
    </script>
    <!-- Saving code to database -->
    <button type="submit" name="save">Save</button>
  </form>

  <div id='template' class="template"></div>
</body>

</html>