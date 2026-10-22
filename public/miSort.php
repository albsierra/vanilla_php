<?php
  function enlaceVideo(?string $video = null): string
  {
      if ($video === null || $video === '') {
          return 'Sin vídeo';
      }
      return '<a href="' . $video . '">vídeo</a>';
  }

echo "Con valor: ";

echo enlaceVideo("Youtube....");
echo "<br />Con <code>null</code>";
echo enlaceVideo(null);
echo "<br />Sin valor";
echo enlaceVideo();
