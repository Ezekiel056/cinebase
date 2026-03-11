function deleteMovie(id) {
  if (confirm("Etes-vous certain de vouloir supprimer ce film ?")) {
    fetch(`/films/delete/${id}`, {
      method: "POST",
    })
      .then((res) => {
        console.log(res);
        if (res.redirected) {
          window.location.href = res.url;
        }
      })
      .catch(() => alert("Erreur lors de la suppression"));
  }
}
