<x-layout title="Add a Game">
    <h1>Add a Game</h1>
    <form method="POST" action="/">
      @csrf
      <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"/>
      </div>
      <div>
        <label for="date">Date Released:</label>
        <input type="date" id="date" name="date"/>
      </div>
      <div>
        <label for="age_rating">Age Rating:</label>
        <select id="age_rating" name="age_rating">
          <option value="3">3+</option>
          <option value="7">7+</option>
          <option value="12">12+</option>
          <option value="16">16+</option>
          <option value="18">18+</option>
        </select>
      </div>
      <div>
        <label for="genre">Genres:</label>
        <select id="genre" name="genre" multiple>
          <option value="action">Action</option>
          <option value="adventure">Adventure</option>
          <option value="arcade">Arcade</option>
          <option value="casual">Casual</option>
          <option value="multiplayer">Multiplayer</option>
          <option value="platformer">Platformer</option>
          <option value="puzzle">Puzzle</option>
          <option value="racing">Racing</option>
          <option value="rp">Role-Playing</option>
          <option value="shooter">Shooter</option>
          <option value="simulation">Simulation</option>
          <option value="sports">Sports</option>
          <option value="strategy">Strategy</option>
        </select>
      </div>
      <div>
        <button type="submit">Add Game</button>
      </div>
  </form>
</x-layout>
